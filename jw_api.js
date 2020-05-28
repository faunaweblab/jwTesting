function generateNounce() {
    let nounce = Math.floor(Math.random() * 100000000);
    console.log(nounce);
}

function getTimestamp() {
    let timeStamp = Math.floor(Date.now() /1000);
    console.log (timeStamp)
}

function encodeText() {
    let text = $('#text').val();
   text = encodeURI(text);
   console.log(text);
}