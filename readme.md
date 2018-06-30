# Edfa3ly task


i choose task number one which is about  many different couriers what have their work flow but we want consumer 
no to handel ever courier work flow and want to access only two function
<br/> 
1- create shipment <br/>
2- track shipment




#solution

make an interface that have the two methods and make w wrapper class for 
every shipment courier which implement the mentioned interface,
every wrapper handel every courier work flow,
when call the wrapper class we only access the two method and every one of the
handel the work flow



#running and installation

i use Lumen micro framework  
just run command <br/>
php -S localhost:8000 -t public <hr/>



use can call class from HomeControllers 
from directory App\Http\Controllers. <br/>
Classes inside app\Courier <br/>