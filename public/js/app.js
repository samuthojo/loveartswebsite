var sources = [];
var buffers = [];
var curStartTime;
var el, elIdx, curElIdx = null;
var canvas, ctx;
var audioCtx = new (window.AudioContext || window.webkitAudioContext)(); // define audio audioCtx
var curGainNode;
var startedAt, pausedAt, paused = false;
var timeIn;

audioCtx.loop = true;
var looper;

$('.song').on("click", songClicked);

function songClicked(){
    el = $(this);
    elIdx = el.index();

    if(elIdx !== curElIdx){
        clearOthers(el);
        canvas = el.find('canvas').get(0);
        ctx = canvas.getContext("2d");

        if(!sources[elIdx]){
            el.addClass("loading");
            console.log("naitafuta audio yangu.... ");
            getAudio();
        }else{
            switchSongs();
        }
    }else{
        console.log("song " + elIdx + " is now current!");
        // sources[elIdx].stop(0);
        if (paused) playCur();
        else stopCur();
    }
}

function clearOthers(el){
    $("#works .song").not(el).removeClass("loading current playing");
}

function getAudio() {
    var url = el.data('src');

    bufferLoader = new BufferLoader(
        audioCtx,
        [url],
        finishedLoading
    );

    bufferLoader.load();
}

function finishedLoading(bufferList){
    buffers[elIdx] = bufferList[0];
    switchSongs();
}

function switchSongs(){
    var gainNode = audioCtx.createGain();
    analyser = audioCtx.createAnalyser();
    sources[elIdx] = audioCtx.createBufferSource();

    sources[elIdx].buffer = buffers[elIdx];
    gainNode.connect(analyser);
    sources[elIdx].connect(gainNode);
    analyser.connect(audioCtx.destination);
    var currTime = audioCtx.currentTime;
    curStartTime = currTime;
    startedAt = Date.now();

    if(curElIdx === null){
        console.log("Hamna inayoplay saivi...");
        sources[elIdx].start(0);
    }else{
        gainNode.gain.setValueAtTime(0, currTime);
        sources[elIdx].start(0);

        curGainNode.gain.setValueAtTime(1.0, currTime);
        curGainNode.gain.linearRampToValueAtTime(0, currTime + 1);

        gainNode.gain.linearRampToValueAtTime(1, currTime + 2);
        // sources[curElIdx].stop ? sources[curElIdx].stop(0) : sources[curElIdx].noteOff(0);
    }

    curGainNode = gainNode;
    curElIdx = elIdx;
    rollPlayer(analyser);
    paused = false;
}

function rollPlayer(analyser) {
    console.log("imeshapatwa....");
    el.removeClass("loading");
    el.addClass("current");
    el.addClass("playing");

    frameLooper();
}

function frameLooper(){
    requestAnimationFrame(frameLooper);
    fbc_array = new Uint8Array(analyser.frequencyBinCount);
    analyser.getByteFrequencyData(fbc_array);
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    timeIn = audioCtx.currentTime - curStartTime;
    el.find(".song-time-in").text(formattedTime(timeIn));

    for (var i = 0; i < canvas.width / 2; i++) {
        bar_width = 0.5;
        bar_x = i * 1.4;
        bar_height = -(fbc_array[i]) / 2;

        ctx.fillStyle = '#777';
        ctx.fillRect(bar_x, canvas.height, bar_width, bar_height);
    }
}

function formattedTime(time){
    if (!time)
        time = 0;

    var hr  = parseInt(time/3600);
    var min = parseInt(time/60);
    var sec = parseInt(time%60);

    return ((hr > 0) ? ((hr > 9) ? hr : '0'+hr)+':' : '' )+((min > 9) ? min : '0'+min)+':'+ ((sec > 9) ? sec : '0'+sec);
}

function playCur() {
    paused = false;

    analyser = audioCtx.createAnalyser();
    sources[curElIdx] = audioCtx.createBufferSource();
    sources[curElIdx].buffer = buffers[curElIdx];
    curGainNode.connect(analyser);
    sources[curElIdx].connect(curGainNode);
    analyser.connect(audioCtx.destination);

    console.log(pausedAt);

    if (pausedAt) {
        console.log("from pause");
        startedAt = Date.now() - pausedAt;
        sources[curElIdx].start(0, pausedAt / 1000);
    }
    else {
        console.log("Not from pause");
        startedAt = Date.now();
        sources[curElIdx].start(0);
    }

    el.addClass("playing");
    frameLooper();
}

function stopCur() {
    sources[curElIdx].stop(0);
    pausedAt = Date.now() - startedAt;
    paused = true;

    el.removeClass("playing");
}