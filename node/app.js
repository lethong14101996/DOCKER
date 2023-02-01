var http=require('http');
var sleep=require('system-sleep');
var os=require('os');
var hostname=os.hostname();

http.createServer(function(request, response){
    sleep(1);
    response.writeHead(200,{content_type:"text/plain"});
    response.end(' Swarm server Node App, hostname: '+hostname);
}).listen(8085);
console.log('Node App listening on port 8085,hostname: '+hostname);
