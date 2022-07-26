import { Navbar, Nav, Container, Offcanvas, NavDropdown, Form, FormControl, Button } from 'react-bootstrap'
import { NavLink } from 'react-router-dom'
import { useHistory } from 'react-router-dom';
import axios from "axios";
import logo from '../logo.svg';

const Header = () => {
    const history = useHistory();
    let user = JSON.parse(localStorage.getItem('user-info'))
    //console.warn(user.s_name)

    function logOut() {
        var obj = { Token: user.token };
        //console.log(obj);
        axios
            .post("http://127.0.0.1:8000/api/logout", obj)
            .then((resp) => {
                var token = resp.data;
                console.log(token);
            })
            .catch((err) => {
                console.log(err);
            });
        localStorage.clear();
        history.push('/login');
    }



    // const navigate = useNavigate();
    return (
        <div>
            <Navbar bg="warning" expand={false}>
                <Container fluid>
                    <center><img src={logo} height={30} width={50} /></center>
                    <Navbar.Brand href=""><center><img src={logo} height={30} width={50} /></center></Navbar.Brand>
                    <Navbar.Toggle aria-controls="offcanvasNavbar" />
                    <Navbar.Offcanvas
                        id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel"
                        placement="end"
                    >
                        <Offcanvas.Header closeButton>
                            <Offcanvas.Title id="offcanvasNavbarLabel">Contents</Offcanvas.Title>
                        </Offcanvas.Header>
                        <Offcanvas.Body>
                            <Nav className="justify-content-end flex-grow-1 pe-3">
                                {
                                    localStorage.getItem('user-info') ?
                                        <>
                                            <NavDropdown title="User" id="offcanvasNavbarDropdown">
                                                <NavDropdown.Item>Seller Id : {user && user.id}</NavDropdown.Item>
                                                <NavDropdown.Divider />
                                                <NavDropdown.Item onClick={logOut}>
                                                    Log Out
                                                </NavDropdown.Item>
                                            </NavDropdown>
                                            <Nav.Link className="text-dark" as={NavLink} to="/home">Home</Nav.Link>
                                            <NavDropdown title="Products" id="offcanvasNavbarDropdown">
                                                <NavDropdown.Item href="/productList">Product List</NavDropdown.Item>
                                                <NavDropdown.Item href="/product/add">Add New Product</NavDropdown.Item>
                                                <NavDropdown.Divider />
                                                <NavDropdown.Item href="product/unapproved">
                                                    Unapproved Products
                                                </NavDropdown.Item>
                                            </NavDropdown>
                                        </>
                                        :
                                        <>
                                            {/* <Nav.Link as NavLink to={'/home'} </Nav.Link> */}
                                            <Nav.Link className="text-dark" as={NavLink} to="/home">Home</Nav.Link>
                                            <Nav.Link className="text-dark" as={NavLink} to="/register">Registration</Nav.Link>
                                            <Nav.Link className="text-dark" as={NavLink} to="/login">Login</Nav.Link>
                                            {/* <Nav.Link href="/register">Registration</Nav.Link>
                                            <Nav.Link href="/login">Login</Nav.Link> */}
                                        </>
                                }
                            </Nav>
                            {/* <br /><Form className="d-flex">
                                <FormControl
                                    type="search"
                                    placeholder="Search"
                                    className="me-2"
                                    aria-label="Search"
                                />
                                <Button variant="outline-success">Search</Button>
                            </Form> */}
                        </Offcanvas.Body>
                    </Navbar.Offcanvas>
                </Container>
            </Navbar>
        </div>
    )
}

export default Header