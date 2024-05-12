import React from "react";
import ListUser from "./components/ListUser";
import CreateUser from "./components/CreateUser";
import { BrowserRouter as Router, Routes, Route, Link } from "react-router-dom";
import EditUser from "./components/EditUser";

const App = () => {
  return (
    <div>
      <h4>React CRUD operations using PHP API and MySQL</h4>

      <Router>
        <nav className="navbar">
          <ul>
            <li>
              <Link to="/" className="linkStyle">
                List Users
              </Link>
            </li>
            <li>
              <Link to="user/create" className="linkStyle">
                Create Users
              </Link>
            </li>
          </ul>
        </nav>
        <Routes>
          <Route index element={<ListUser />} />
          <Route path="user/create" element={<CreateUser />} />
          <Route path="user/:id/edit" element={<EditUser />} />
        </Routes>
      </Router>
    </div>
  );
};

export default App;
