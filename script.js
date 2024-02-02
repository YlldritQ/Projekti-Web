
function openLink(link){
    window.open(link, "_self");
}

function openNews(baseLink, newsID) {

    const form = document.createElement('form');
    form.action = baseLink;
    form.method = 'POST';

    const input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'newsId';
    input.value = newsID;

    form.appendChild(input);

    document.body.appendChild(form);
    form.submit();
}





