const mongoose = require('express')
const User = require('../models/registeredData')

const login = async(req, res) => {
    res.render('login')
}

const index = async(req, res) => {
    res.render('index')
}

const userRegister = async(req, res) => {
    try {
        const user = {
            firstname: req.body.firstName,
            lastname: req.body.lastName,
            email: req.body.email,
            address: req.body.address,
            password: req.body.password
        };
        const newUser = new User(user);
        const result = await newUser.save();
        console.log(user)
        res.redirect('/data/login')
    } catch (e) {
        return res.status(400).json({
            error: e
        })
    }
}

const userLogin = async(req, res) => {
    try {
        const email = req.body.email;
        const password = req.body.password;
        console.log(req.body)
        await User.findOne({ email: email, password: password }, (err, foundResults) => {
            if (err) {
                console.log(err)
            } else {
                if (foundResults.password === password) {
                    console.log('test');
                    res.render('profile', { foundResults: foundResults })
                } else {
                    res.redirect('/login')
                }
            }
        })

    } catch (e) {
        return res.status(400)
    }
}

module.exports = {
    login,
    index,
    userRegister,
    userLogin
}