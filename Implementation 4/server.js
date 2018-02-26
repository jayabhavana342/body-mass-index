
var http = require('http'),
    util = require('util'),
    fs = require('fs'),
    url = require('url'),
    qs = require('querystring');

var server = http.createServer(function (req,res){
                            
    var url_parts = url.parse(req.url,true);
    //console.log(url_parts);
    
    var body = '';
	
    if(req.method === 'POST'){
       // res.end('post');
       console.log('Request found with POST method');     
        req.on('data', function (data) {
            body += data;
            console.log('got data:'+data);
        });
        req.on('end', function () {

            var POST = qs.parse(body);
            // use POST
            res.end("Sent data are name:"+POST.name+" age:"+POST.age);

        });
        
       
    } else {
    console.log('Request found with GET method');     
    req.on('data',function(data){ res.end(' data event: '+data);});
    if(url_parts.pathname == '/')
        
    fs.readFile('./form.html',function(error,data){ 
    console.log('Serving the page form.html');
    res.end(data);    
    });

    else if(url_parts.pathname == '/getData'){
         console.log('Serving the Got Data.');
        getData(res,url_parts);
    }
        }

});
server.listen(8080);
console.log('Server listenning at localhost:8080');



function  getData(res,url_parts){
	var i=(url_parts.query.name*703)/(url_parts.query.age*url_parts.query.age);
	var m=(url_parts.query.name)/(url_parts.query.age*url_parts.query.age);
	console.log(i);
 console.log("Data submitted BMI Imperial:"+i+" and BMI Metric:"+m);
        res.end("Data submitted BMI Imperial:"+i+" and BMI Metric:"+m);
		
		}