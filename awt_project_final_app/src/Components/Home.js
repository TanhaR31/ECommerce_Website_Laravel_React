// import Header from "./Header";

// import React from "react";

// const Home = () => (
//   <div>
//     <>
//       <Header />
//       <h1 className="title is-1">This is the Home Page</h1>
//       <p>
//         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida,
//         risus at dapibus aliquet, elit quam scelerisque tortor, nec accumsan eros
//         nulla interdum justo. Pellentesque dignissim, sapien et congue rutrum,
//         lorem tortor dapibus turpis, sit amet vestibulum eros mi et odio.
//       </p>
//     </>
//   </div>
// );

// export default Home;

import Header from "./Header";
import { useHistory, Link } from "react-router-dom";
import axios from "axios";
import react, { useState, useEffect } from "react";

function Home() {

    const [products, setProducts] = useState([]);
    const [refresh, setRefresh] = useState(false);
    const history = new useHistory();
    useEffect(() => {

        axios

            .get("http://127.0.0.1:8000/api/product/list")

            .then((resp) => {

                console.log(resp.data);

                setProducts(resp.data);

            })

            .catch((err) => {

                console.log(err);

            });

    }, [refresh]);

    //const history = useHistory();

    return (
        <>
            <Header />

            <div class="">
            <center><h1>Available Product List Page</h1></center>
                <div className="col-sm-4 offset-sm-2">
                    
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                                <th>Seller Id</th>
                                <th>Product Id</th>
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
                            </tr>
                        </thead>
                        <tbody>
                            {Object.keys(products).length !== 0 &&

                                products.map((product) => (
                                    <tr key={product.id}>
                                        <td>{product.s_id}</td>
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

export default Home;
