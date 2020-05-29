function generateNounce() {
    let nounce = Math.floor(Math.random() * 100000000);
    console.log(nounce);
    return nounce;
}

function getTimestamp() {
    let timeStamp = Math.floor(Date.now() /1000);
    console.log (timeStamp)
    return timeStamp;
}

function encodeText() {
    let text = $('#text').val();
   text = encodeURI(text);
   console.log(text);
   return text;
}