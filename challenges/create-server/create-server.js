const http = require('http');

const server = http.createServer((req,res) => {
    console.log("Listening Request" + req);
});

server.listen(3000);