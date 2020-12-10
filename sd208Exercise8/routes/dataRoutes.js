const express = require("express");
const router = express.Router();

const {
    login,
    userLogin,
    index,
    userRegister


} = require("../controllers/dataController");

// define every routes for registeredData Controller specific functions  
router.get("/login", login)
router.get("/", index)
router.post("/userLogin", userLogin)
router.post("/register", userRegister)



module.exports = router;