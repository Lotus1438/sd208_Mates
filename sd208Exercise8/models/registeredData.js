const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const dataSchema = new Schema({
    firstname: { type: String, required: true },
    lastname: { type: String, required: true },
    address: { type: String, required: true },
    email: { type: String, required: true },
    password: { type: String, required: true }
});

const dataModel = mongoose.model('registeredData', dataSchema);

module.exports = dataModel;