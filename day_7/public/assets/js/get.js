function getUserById(userId) {
    let request = new XMLHttpRequest();
    request.open('GET', window.location + 'search.php?id=' + userId, true);

    request.onreadystatechange = function() {
        if(request.readyState === 4 && request.status === 200) {
            let response = JSON.parse(request.response);
            if(!response.error) {
                alert(response.data);
            }
        }
    };

    request.send();
}