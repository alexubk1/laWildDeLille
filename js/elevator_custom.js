window.onload = function() {
  var elevator = new Elevator({
    element: document.querySelector('.elevator-button'),
    mainAudio: 'audio/Elevator-music.mp3',
    endAudio: 'audio/Elevator-bell.mp3'
  });
}
elevator.elevate();
