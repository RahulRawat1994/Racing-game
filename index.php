<!DOCTYPE html>
<html>
    <head>
        <title>Games</title>

    </head>
    <body style="text-align: center;background:#000;margin:0px;padding:0px;">
        <canvas id="gameCanvas" ></canvas>
    </body>
    <script type="text/javascript">
    var i=j=0;
        window.onload=function(){
            
            c=document.getElementById("gameCanvas");
            c.width=400;
            c.height=window.innerHeight;
            cc=c.getContext('2d');
            setInterval(update,1000/30);
            var map = {}; // You could also use an array
            window.addEventListener('keypress',function(e){
                
                onkeydown = onkeyup = function(e){
                    e = e || event; // to deal with IE
                    map[e.keyCode] = e.type == 'keydown';
                }

                if(map[87]){
                    i+=1.5;
                    if(map[65]){
                            j-=1;
                    } else if(map[68]){
                            j+=1;
                    }
                } else if(map[83]){
                    i-=1.5;
                    if(map[65]){
                            j-=1;
                    } else if(map[68]){
                            j+=1;
                    }
                } else if(map[65]){
                    j-=1;

                } else if(map[68]){
                    j+=1;
                }

            })
        }
        function update(){
             
            cc.fillStyle="#696A6C";
            cc.fillRect(0,0,c.width,c.height)
            cc.fillStyle="#8bc34a";
            var img=new Image();
            img.src="grass.jpg";
            cc.drawImage(img,0,0,60,c.height);
            cc.drawImage(img,c.width-60,0,60,c.height);
            cc.fillStyle="#b7a93a"
            
            cc.fillRect(60,0,20,c.height)
            img=new Image();
            img.src="road.jpg";
            cc.drawImage(img,80,0,c.width-160,c.height)
            cc.fillRect(c.width-80,0,20,c.height)
            cc.fillStyle="#adaeaf";

            //cc.fillRect(80,c.height-100,c.width-160,20)
            cc.fillStyle="white";
            cc.fillText("Score: 153",10,30);
            cc.fillText("Time : 25",c.width-50,30,100);

            img=new Image();
            img.src="car.png";
            cc.drawImage(img, ((c.width/2)-10)+j,(c.height-60)-i,30,50);
            
            cc.beginPath();

            cc.lineCap = "square";
            cc.moveTo(80,c.height-95);
            cc.lineTo(c.width-80,c.height-95);
            cc.strokeStyle = '#fff';
            cc.stroke();
            cc.lineCap = "square";
            cc.moveTo(80,c.height-90);
            cc.lineTo(c.width-80,c.height-90);
            cc.strokeStyle = '#fff';
            cc.stroke();
            cc.lineCap = "square";
            cc.moveTo(80,c.height-85);
            cc.lineTo(c.width-80,c.height-85);
            cc.strokeStyle = '#fff';
            cc.stroke();

        }

    </script>
</html>