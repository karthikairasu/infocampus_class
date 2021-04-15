var canvas = document.querySelector('canvas');
canvas.width=window.innerWidth;
canvas.height=window.innerHeight;
var c=canvas.getContext('2d');
/* c.fillStyle="red";
c.fillRect(100,200,200,200);<!------(x,y,height,width)--------> */

/* c.fillStyle="magenta";
c.fillRect(500,200,200,200);

c.fillStyle="orange"; //color
c.strokeRect(500,500,200,200);  //border
c.fillRect(500,500,200,200);    //rectangle

c.fillStyle="silver"; //color
c.strokeRect(900,50,200,200);  //border
c.fillRect(900,50,200,200); 


c.fillStyle="lightgreen"; //color
c.strokeRect(1200,300,200,200);  //border
c.fillRect(1200,300,200,200); 


//for drawing lineHeight

c.beginPath();
c.moveTo(600,400);  //start --->left top x,y values
c.lineTo(600,100);
c.stroke(); */


/* c.beginPath();
c.moveTo(800,600);  //start --->left top x,y values
c.lineTo(800,100);
c.stroke();

//for drawing arc

c.beginPath();
c.arc(300,300,40,0,Math.PI*2,false);
c.strokeStyle="green";
c.stroke(); */

for(var i=0;i<100;i++)
{
	var x = Math.random()*window.innerWidth;
	var y = Math.random()*window.innerHeight;
	c.beginPath();
	c.arc(x,y,40,0,Math.PI*2,false);
	c.strokeStyle="green";
	c.stroke();
}

c.font="30px Arial";
c.strokeText("Welcome to canvas",50,30);