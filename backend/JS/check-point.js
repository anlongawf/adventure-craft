function checkPoint(CLASS){
    fetch('backend/PHP/check-point.php')
    .then(response => response.text())
    .then(result => {
    
    point = document.getElementsByClassName(CLASS);
    for (let i of point){
        i.innerText = result;
    }
    })
    .catch(error => {
    console.error('Lỗi:', error);
    });
}