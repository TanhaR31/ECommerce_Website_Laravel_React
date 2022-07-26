import { BrowserRouter, Route, Switch } from "react-router-dom";
import Register from "./Components/Register"
import Home from "./Components/Home"
import Login from "./Components/Login";
import SellerProductList from "./Components/SellerProductList";
import SellerProductAdd from "./Components/SellerProductAdd";
import SellerProductUpdate from "./Components/SellerProductUpdate";
import SellerProductDelete from "./Components/SellerProductDelete";
import SellerProductUnapproved from "./Components/SellerProductUnapproved";
import Protected from "./Components/Protected";


// var token = null;
// if (localStorage.getItem("user-info")) {
//   var obj = JSON.parse(localStorage.getItem("user-info"));
//   token = obj.token;
// }
// axios.defaults.baseURL = "http://127.0.0.1:8000/api/";
// axios.defaults.headers.common["Authorization"] = token;

function App() {

    return (

        <BrowserRouter>

            <div className="wrapper">

                <Switch>

                    <Route exact path="/">

                        <Home />

                    </Route>

                    <Route exact path="/login">

                        <Login />

                    </Route>

                    <Route exact path="/register">

                        <Register />

                    </Route>

                    <Route path="/home">

                        <Home />

                    </Route>

                    <Route path="/productList">

                        <Protected Cmp={SellerProductList} />

                    </Route>

                    <Route path="/product/add">

                        <Protected Cmp={SellerProductAdd} />

                    </Route>

                    <Route path="/updateProduct/:id">

                        <Protected Cmp={SellerProductUpdate} />

                    </Route>

                    <Route path="/product/delete">

                        <Protected Cmp={SellerProductDelete} />

                    </Route>

                    <Route path="/product/unapproved">

                        <Protected Cmp={SellerProductUnapproved} />

                    </Route>

                </Switch>

            </div>

        </BrowserRouter>

    );

}



export default App;