import React, { useState } from "react";
import { Link } from "react-router-dom";
import { useHistory } from "react-router-dom";
import axios from "axios";
import Header from "./Header";

const Login = () => {
  let [token, setToken] = useState("");
  let [id, setId] = useState("");
  let [password, setPassword] = useState("");

  const history = useHistory();

  const loginSubmit = (e) => {
    e.preventDefault();
    var obj = { id: id, s_password: password };
    //console.log(obj);
    axios
      .post("http://127.0.0.1:8000/api/login", obj)
      .then((resp) => {
        var token = resp.data;
        console.log(token);

        if(token){
          let user = { id, password, token }
          localStorage.setItem("user-info", JSON.stringify(user));
          // console.log(localStorage.getItem('user'));
          history.push("/productList");
        }
        else{
          alert("User Not Found !!")
          history.push("/login");
        }
        

        //var user = { userId: token.userid, access_token: token.token };
        
      })
      .catch((err) => {
        console.log(err);
      });
  };

  return (
    <>
      <Header />
      <div class="">
        <div className="col-sm-6 offset-sm-3">
          <div className="login-logo">
          </div>
          <div className="">
            <div className="card-body login-card-body">
              <center><h1>Sign In</h1></center>
              <form onSubmit={loginSubmit}>
                <input
                  type="hidden"
                  name="_token"
                  defaultValue="ml2LlcQzOoKpWLtpIOu88pSstP8OyAqxyRDZLIdH"
                />
                <div className="mb-2">
                  <div className="input-group">
                    <input
                      type="text"
                      className="form-control"
                      placeholder="UserID"
                      name="userId"
                      value={id}
                      onChange={(e) => setId(e.target.value)}
                    />
                    <div className="input-group-append">
                      <div className="input-group-text">
                        <span className="fas fa-envelope" />
                      </div>
                    </div>
                  </div>
                </div>
                <div className="mb-2">
                  <div className="input-group">
                    <input
                      type="password"
                      className="form-control"
                      placeholder="Password"
                      name="password"
                      value={password}
                      onChange={(e) => setPassword(e.target.value)}
                    />
                    <div className="input-group-append">
                      <div className="input-group-text">
                        <span className="fas fa-lock" />
                      </div>
                    </div>
                  </div>
                </div>
                <div className="row">
                  <div className="col-4">
                    <input
                      type="submit"
                      defaultValue="login"
                      className="btn btn-primary btn-block"
                    />
                  </div>
                  {/* /.col */}
                </div>
              </form>

              <h1 className="forgot-password text-center">
              Don't have a account? <a href="/register">Register Here</a>
                </h1>

            </div>
            {/* /.login-card-body */}
          </div>
        </div>
        {/* /.login-box */}
        {/* jQuery */}
        {/* Bootstrap 4 */}
        {/* AdminLTE App */}
      </div>
    </>

  );
};

export default Login;
