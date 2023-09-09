function addPost() {
    let post_add = document.querySelector('.post_add');
    let close = document.querySelector('.close');
    let modal = document.querySelector('.modal');
    post_add.addEventListener('click', (e) => {
        e.preventDefault;
        modal.classList.add('d_modal');
    })
    close.addEventListener('click', () => {
        if (modal.classList.contains('d_modal')) {
            modal.classList.remove('d_modal');
        }
    })
}

addPost();


function like() {
    let card_post = document.querySelectorAll('.card_post');
    card_post.forEach(elem => {
        let like_button = elem.querySelector('.like');
        let count_like = elem.querySelector('.like_count');
        let count = 0;
        if (count_like.innerText < 0) {
            like_button.setAttribute('disabled', 'disabled')
        }
        like_button.addEventListener('click', () => {
            count_like.innerText = count++;
        })
    })
}

like();