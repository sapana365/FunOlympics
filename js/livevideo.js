console.log("connected");
var today = new Date();
var time = today.getSeconds();
console.log(time);
var videoplayer = document.getElementById('livevid')
var sync = document.getElementById('sync')
var play = document.getElementById('play')
var playtext = document.getElementById('playtext')
var tglbtn = document.getElementById("tglbtn");
var issync = false;




function makevideolive() {
    var today = new Date();
    var hr = today.getHours();
    var minutes = today.getMinutes();
    var seconds = today.getSeconds();
    var totalseconds = (hr * 60 * 60) + (minutes * 60) + (seconds);
    console.log(totalseconds);
    //
    var videominutes = 2;
    var videoseconds = 30;
    var videotime = videominutes * 60 + videoseconds;
    console.log(videotime);
    var divided = totalseconds % videotime;
    console.log(divided);
    videoplayer.currentTime = divided;
    tglbtn.classList.replace("bg-[#777]", "bg-[#F33]");
    videoplayer.play();
    videoplayer.muted = false;

}
document.getElementById('livevid').addEventListener('loadedmetadata', function () {
    videoplayer.volume = 1;
    setTimeout(
        function () {
            console.log("timeout");
            makevideolive();
        }, 1000);

    this.currentTime = time;
}, false);

tglbtn.onclick = function (event) {
    console.log("clicked")
    makevideolive();
}
var volumeelem = document.getElementById("volume");
volumeelem.onchange = function (event) {
    console.log(event.target.value)
    var volume = event.target.value / 10
    console.log("change")
    videoplayer.volume = volume;
}
var element = document.getElementById("tglplay");
element.onclick = () => {
    playpause();
}

function playpause() {
    console.log("clicked")
    if (videoplayer.paused) {
        videoplayer.play();
        play.className = "fa-sharp fa-solid fa-pause";
        playtext.innerText = "Pause"
    }
    else {
        videoplayer.pause();
        tglbtn.classList.replace("bg-[#F33]", "bg-[#777]");
        play.className = "fa-sharp fa-solid fa-play";
        playtext.innerText = "Play"
    }

};