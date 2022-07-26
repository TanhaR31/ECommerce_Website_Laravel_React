import Header from "./Header";
import react, { useState, useEffect } from "react";
import { useParams, useHistory } from "react-router-dom";
import axios from "axios";
import { useForm } from "react-hook-form";

function SellerProductUpdate() {
    const {

        register,

        handleSubmit,

        watch,

        formState: { errors },

    } = useForm();

    const id = useParams();
    // const [p_name, setPName] = useState("");
    // const [ct_id, setCTId] = useState("");
    // const [p_description, setPDescription] = useState("");
    // const [p_qty, setPQty] = useState("");
    // const [fix_cost, setFCost] = useState("");
    // const [var_cost, setVCost] = useState("");
    // const [extra_price, setEPrice] = useState("");
    // const [discount, setDiscount] = useState("");
    const [products, setProducts] = useState([]);

    const history = new useHistory();
    //console.log(id.id);
    useEffect(() => {

        axios

            .get(`http://127.0.0.1:8000/api/getProduct/${id.id}`)

            .then((resp) => {

                console.log(resp.data);

                setProducts(resp.data);

            })

            .catch((err) => {

                console.log(err);

            });

    }, []);


    const onSubmit = (data) => {

        console.log(data);

        axios

            .post("http://127.0.0.1:8000/api/updateProduct", data)



            .then((resp) => {

                console.log(resp);
                alert('Product Info Updated :)');
                history.push("/productList");

            })

            .catch((err) => {

                console.log(err);

            });

    };

    return (
        <>
            <Header />
            <center><h1>Product Update Page</h1></center>
            <div className="col-sm-6 offset-sm-4">
            
                {Object.keys(products).length !== 0 && (
                    <form
                        onSubmit={handleSubmit(onSubmit)}
                        className="form-horizontal"
                    >
                        <div className="col-sm-10">
                            <input
                                value={products.id}
                                {...register("id")}
                                className="form-control"
                                id="id"
                                type="hidden"
                            />
                        </div>
                        {/* For Name React Hook From starts */}
                        <div className="form-group row">
                            <div className="col-sm-10">
                                <input
                                    value={products.s_id}
                                    {...register("s_id")}
                                    className="form-control"
                                    id="name"
                                    type="hidden"
                                />
                            </div>
                        </div>

                        <div className="form-group row">
                            <label
                                htmlFor="p_name"
                                className="col-sm-2 col-form-label"
                            >
                                Product Name
                            </label>
                            <div className="col-sm-10">
                                <input
                                    defaultValue={products.p_name}
                                    {...register("p_name")}
                                    className="form-control"
                                />
                            </div>
                        </div>
                        {/* For password React Hook From ends */}
                        {/* For Address React Hook From starts */}
                        <div className="form-group row">
                            <label
                                htmlFor="ct_id"
                                className="col-sm-2 col-form-label"
                            >
                                Category Id
                            </label>
                            <div className="col-sm-10">
                                <input
                                    defaultValue={products.ct_id}
                                    {...register("ct_id")} s
                                    className="form-control"
                                />
                            </div>
                        </div>

                        <div className="form-group row">
                            <label
                                htmlFor="p_description"
                                className="col-sm-2 col-form-label"
                            >
                                Description
                            </label>
                            <div className="col-sm-10">
                                <input
                                    defaultValue={products.p_description}
                                    {...register("p_description")}
                                    className="form-control"
                                />
                            </div>
                        </div>

                        <div className="form-group row">
                            <label
                                htmlFor="p_description"
                                className="col-sm-2 col-form-label"
                            >
                                Product Quantity
                            </label>
                            <div className="col-sm-10">
                                <input
                                    defaultValue={products.p_qty}
                                    {...register("p_qty")}
                                    className="form-control"
                                />
                            </div>
                        </div>

                        <div className="form-group row">
                            <label
                                htmlFor="fix_cost"
                                className="col-sm-2 col-form-label"
                            >
                                Fixed Cost
                            </label>
                            <div className="col-sm-10">
                                <input
                                    defaultValue={products.fix_cost}
                                    {...register("fix_cost")}
                                    className="form-control"
                                />
                            </div>
                        </div>

                        <div className="form-group row">
                            <label
                                htmlFor="var_cost"
                                className="col-sm-2 col-form-label"
                            >
                                Variable Cost
                            </label>
                            <div className="col-sm-10">
                                <input
                                    defaultValue={products.var_cost}
                                    {...register("var_cost")}
                                    className="form-control"
                                />
                            </div>
                        </div>

                        <div className="form-group row">
                            <label
                                htmlFor="extra_price"
                                className="col-sm-2 col-form-label"
                            >
                                Extra Price
                            </label>
                            <div className="col-sm-10">
                                <input
                                    defaultValue={products.extra_price}
                                    {...register("extra_price")}
                                    className="form-control"
                                />
                            </div>
                        </div>

                        <div className="form-group row">
                            <label
                                htmlFor="discount"
                                className="col-sm-2 col-form-label"
                            >
                                Discount
                            </label>
                            <div className="col-sm-10">
                                <input
                                    defaultValue={products.discount}
                                    {...register("discount")}
                                    className="form-control"
                                />
                            </div>
                        </div>



                        <br/><div className="form-group row">
                            <div className="offset-sm-4 col-sm-6">
                                <input type="submit" className="btn btn-danger" />
                            </div>
                        </div>

                        {/* <input type="submit" /> */}
                    </form>
                )}
            </div>
        </>
    )
}

export default SellerProductUpdate
