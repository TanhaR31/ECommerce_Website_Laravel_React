import Header from "./Header";
import { useHistory, Link } from "react-router-dom";
import axios from "axios";
import Login from "./Login";
import react, { useState, useEffect } from "react";

function SellerProductUnapproved() {

    const [products, setProducts] = useState([]);
    const [refresh, setRefresh] = useState(false);
    const history = new useHistory();
    useEffect(() => {

        var s_id = JSON.parse(localStorage.getItem('user-info')).id
        //console.log(s_id);
        var obj = { s_id: s_id };

        axios

            .post("http://127.0.0.1:8000/api/product/ulist", obj)

            .then((resp) => {

                console.log(resp.data);

                setProducts(resp.data);



            })

            .catch((err) => {

                console.log(err);

            });

    }, [refresh]);

    const changeApprove = (id) => {
        const proceed = window.confirm("Change Approval?");
        if (proceed) {
            axios
                .post(`http://127.0.0.1:8000/api/changeApprove/${id}`)

                .then((resp) => {

                    console.log(resp.data);
                    alert("Approval Changed");
                    //history.push("/productList");
                    setRefresh(true);

                })

                .catch((err) => {

                    console.log(err);

                });

        }
    }


    //const history = useHistory();

    return (
        <>
            <Header />

            <div class="">
                <center><h1>Seller Unapproved Products Page</h1></center>
                <div className="col-sm-4 offset-sm-2">
                    
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Desc</th>
                                <th>Quantity</th>
                                <th>Sold</th>
                                <th>Fixed Cost</th>
                                <th>Variable Cost</th>
                                <th>ADM Cost</th>
                                <th>Extra</th>
                                <th>Discount</th>
                                <th>Total</th>
                                <th>Approved</th>
                                <th>Change</th>
                            </tr>
                        </thead>
                        <tbody>
                            {Object.keys(products).length !== 0 &&

                                products.map((product) => (
                                    <tr key={product.id}>
                                        <td>{product.id}</td>
                                        <td>{product.p_name}</td>
                                        <td>{product.p_category}</td>
                                        <td>{product.p_description}</td>
                                        <td>{product.p_qty}</td>
                                        <td>{product.p_sold}</td>
                                        <td>{product.fix_cost}</td>
                                        <td>{product.var_cost}</td>
                                        <td>{product.adm_cost}</td>
                                        <td>{product.extra_price}</td>
                                        <td>{product.discount}</td>
                                        <td>{product.total_price}</td>
                                        <td>{product.p_approve}</td>
                                        <td><button onClick={() => changeApprove(product.id)} className="btn btn-warning px-3 btn-sm mx-1">Change</button></td>
                                    </tr>
                                ))}
                        </tbody>
                    </table>
                </div>
            </div>
        </>
        // }
        // else
        // <Login />
        // </div>


    )
}

export default SellerProductUnapproved
