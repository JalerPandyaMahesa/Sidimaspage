const {Client} = require('pg')

const client = new Client ({
    host: "localhost",
    user: "postgres",
    port: "5432",
    password: "12341234",
    database: "dapodik"
})

client.connect();

client.query('Select * from dapodik.sekolah', (err, res)=>{
    if(!err){
        console.log(res.rows);
    } else {
        console.log(err.message);
    }
    client.end
})