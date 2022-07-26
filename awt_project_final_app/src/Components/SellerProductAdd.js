import React, { useState } from "react";
import Header from "./Header";
import axios from "axios";
import { useHistory } from "react-router-dom";


function SellerProductAdd() {
    const [p_name, setPName] = useState("");
    const [ct_id, setCTId] = useState("");
    const [p_description, setPDescription] = useState("");
    const [p_qty, setPQty] = useState("");
    const [fix_cost, setFCost] = useState("");
    const [var_cost, setVCost] = useState("");
    const [extra_price, setEPrice] = useState("");
    const [discount, setDiscount] = useState("");
    const [p_image, setPImage] = useState();

    const history = useHistory();

    let s_id = JSON.parse(localStorage.getItem('user-info')).id

    async function addProduct() {
        

        let obj={s_id, p_name, ct_id, p_description, p_qty, fix_cost, var_cost, extra_price, discount}

        // axios
        //     .post("http://127.0.0.1:8000/api/product/add", obj)
        //     .then((resp) => {
        //         var token = resp.data;
        //         console.log(token);
        //         alert("Data");
        //     })
        //     .catch((err) => {
        //         console.log(err);
        //     });
console.log(obj);
        let result=await fetch("http://127.0.0.1:8000/api/product/add",{
            method: 'POST',
            body: JSON.stringify(obj),
            headers: {
                "Content-Type": 'application/json',
                "Accept": 'application/json'
            }
        },
        alert("Product Added :D"),
        history.push("/productList")
        );
        //alert("Data");
            
    }

    // if (localStorage.getItem("user-info")) {
    //     // setId(user-instanceof.)
    //     axios
    //         .post("http://127.0.0.1:8000/api/product/add")
    //         .then((resp) => {
    //             var products = resp.data;
    //             console.log(products);
    //         })
    //     // .catch((err) => {
    //     //     console.log(err);
    //     // });
    // }
    // else
    //     history.push("/login");

    return (
        <>
            <Header />
            <div className="col-sm-6 offset-sm-3">
                <h1>Seller Product Add Page</h1>

                <label>Product Name</label>
                <input type="text" value={p_name} onChange={(e) => setPName(e.target.value)} className="form-control" placeholder="Product Name" />
                <label>Category Id</label>
                <input type="number" value={ct_id} onChange={(e) => setCTId(e.target.value)} className="form-control" placeholder="Product Category Id" />
                <label>Product Description</label>
                <input type="text" value={p_description} onChange={(e) => setPDescription(e.target.value)} className="form-control" placeholder="Product Description" />
                <label>Product Quantity</label>
                <input type="number" value={p_qty} onChange={(e) => setPQty(e.target.value)} className="form-control" placeholder="Product Quantity" />
                <label>Fixed Cost</label>
                <input type="number" value={fix_cost} onChange={(e) => setFCost(e.target.value)} className="form-control" placeholder="Fixed Cost" />
                <label>Variable Cost</label>
                <input type="number" value={var_cost} onChange={(e) => setVCost(e.target.value)} className="form-control" placeholder="Variable Cost " />
                <label>Extra Price</label>
                <input type="number" value={extra_price} onChange={(e) => setEPrice(e.target.value)} className="form-control" placeholder="Extra Price" />
                <label>Discount</label>
                <input type="number" value={discount} onChange={(e) => setDiscount(e.target.value)} className="form-control" placeholder="Discount " />

                <br /><button onClick={addProduct} className="btn btn-primary btn-block">Add Product</button>

            </div>
        </>
    )
}

export default SellerProductAdd
