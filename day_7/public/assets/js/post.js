function storeUser() {
    let request = new XMLHttpRequest();
    request.open('POST', window.location + 'store.php', true);

    request.onreadystatechange = function() {
        if(request.readyState === 4 && request.status === 200) {
            let response = JSON.parse(request.response);
            let user = response.user;
            alert(user.pseudo);
        }
    };

    request.send(JSON.stringify({
        'pseudo':'Drakx116',
        'plainPassword': 'nicepasswordwow'
    }));
}
