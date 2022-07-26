import axios from "axios";
import React, { useState, useEffect } from "react";
import { useHistory } from 'react-router-dom';
import Header from "./Header";

function Register() {
    const [id, setId] = useState("")
    const [s_name, setName] = useState("")
    const [s_phone, setPhone] = useState("")
    const [s_email, setEmail] = useState("")
    const [s_password, setPassword] = useState("")
    const [s_password_confirm, setCPassword] = useState("")
    const [s_address, setAddress] = useState("")
    // const [image, setImage] = useState([])

    const history = useHistory();
    // useEffect(() => {
    //     if (localStorage.getItem('user-info')) {
    //         history.push('/login')
    //     }
    // }, [])

    async function signup() {
        //console.warn(s_name, s_phone, s_email, s_password, s_password_confirm, s_address, image)
        let item = { id, s_name, s_phone, s_email, s_password, s_password_confirm, s_address }
        //console.warn(item)

        let result = await fetch("http://localhost:8000/api/register", {
            method: 'POST',
            body: JSON.stringify(item),
            headers: {
                "Content-Type": 'application/json',
                "Accept": 'application/json'
            }
        })
        var object = { email: s_email };

        axios.post("http://localhost:8000/api/mail", object)

            .then((response) => {
                //alert("ami ekhane")
                console.log(response);

            });
        //result = await result.json()
        // console.warn("result", result)

        //localStorage.setItem("user-info", JSON.stringify(item))
        history.push('/login')
    }

    return (
        <>
            <Header />
            <div className="col-sm-6 offset-sm-3">
                <center><h1>Seller Register Page</h1></center>

                <label>Seller ID</label>
                <input type="number" value={id} onChange={(e) => setId(e.target.value)} className="form-control" placeholder="Enter Id " />

                <label>Name</label>
                <input type="text" value={s_name} onChange={(e) => setName(e.target.value)} className="form-control" placeholder="Enter Name" />

                <label>Phone</label>
                <input type="number" value={s_phone} onChange={(e) => setPhone(e.target.value)} className="form-control" placeholder="Enter Phone" />

                <label>Email address</label>
                <input type="email" value={s_email} onChange={(e) => setEmail(e.target.value)} className="form-control" placeholder="Enter Email Address" />

                <label>Password</label>
                <input type="password" value={s_password} onChange={(e) => setPassword(e.target.value)} className="form-control" placeholder="Enter password" />

                <label>Confirm Password</label>
                <input type="password" value={s_password_confirm} onChange={(e) => setCPassword(e.target.value)} className="form-control" placeholder="Re-Enter password" />

                <label>Address</label>
                <input type="text" value={s_address} onChange={(e) => setAddress(e.target.value)} className="form-control" placeholder="Enter Address" />

                <br /><button onClick={signup} className="btn btn-primary btn-block">Confirm Registration</button>

                <h1 className="forgot-password text-center">
                    Already registered <a href="/login">Sign in?</a>
                </h1>

            </div>
        </>
    )
}

export default Register
