function tab(t) {
    if (t == 1) {
        document.getElementById('content1').style.display = 'block';
        document.getElementById('content2').style.display = 'none';
        document.getElementById('content3').style.display = 'none';
    }
    else if (t == 2) {
        document.getElementById('content1').style.display = 'none';
        document.getElementById('content2').style.display = 'block';
        document.getElementById('content3').style.display = 'none';
    }
    else if (t == 3) {
        document.getElementById('content1').style.display = 'none';
        document.getElementById('content2').style.display = 'none';
        document.getElementById('content3').style.display = 'block';
    }
}