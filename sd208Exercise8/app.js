const express = require("express");
const app = express();
const dataRouter = require("./routes/dataRoutes");
var PORT = 3000;

const bodyParser = require('body-parser');

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

app.set('view engine', 'ejs');


//import mongo connection 
const connectToMongo = require('./dbConnection');
connectToMongo();

app.use('/data', dataRouter);

app.listen(PORT, () => console.log(`Server listening at port ${PORT}`));