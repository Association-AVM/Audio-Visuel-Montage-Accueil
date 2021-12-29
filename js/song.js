var mySong = document.getElementById("mySong");
        var icon = document.getElementById("icon");

        icon.onclick = function(){
            mySong.volume=0.05;
            if(mySong.paused){
                mySong.play();
                icon.src="../Assets/pause.png";
            }else{
                mySong.pause();
                icon.src="../Assets/play.png";  
            }
        }