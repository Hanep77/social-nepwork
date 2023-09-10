document.querySelector('#dropdown-button').addEventListener('click', function () {
    document.querySelector('#dropdown-menu').classList.toggle('hidden')
})


function likeToggle(post_id, user_id) {
    const csrf_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')

    const data = {
        post_id: post_id,
        user_id: user_id,
        _token: csrf_token
    }

    fetch('http://localhost:8000/like', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf_token
        },
        body: JSON.stringify(data)
    })
        .then(response => response.json())
        .then(data => {
            data.message == 'success' ? like(post_id) : unlike(post_id)
        })
}

function like(post_id) {
    postLike = document.querySelector('.post-' + post_id + ' button i')
    postLike.classList.replace('bi-hand-thumbs-up', 'bi-hand-thumbs-up-fill')
    document.querySelector('.post-' + post_id + ' .likeTotal').innerText++
}

function unlike(post_id) {
    postLike = document.querySelector('.post-' + post_id + ' button i')
    postLike.classList.replace('bi-hand-thumbs-up-fill', 'bi-hand-thumbs-up')
    document.querySelector('.post-' + post_id + ' .likeTotal').innerText--
}

const posts = document.querySelectorAll('.posts button i')

document.addEventListener('DOMContentLoaded', function () {
    posts.forEach(postLike => {
        const user_id = postLike.dataset.user_id
        const post_id = postLike.dataset.post_id

        isLiked(user_id, post_id)
    })
})

function isLiked(user_id, post_id) {
    const csrf_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')

    const data = {
        post_id: post_id,
        user_id: user_id,
        _token: csrf_token
    }

    fetch('http://localhost:8000/isLiked', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf_token
        },
        body: JSON.stringify(data)
    })
        .then(response => response.json())
        .then(data => {
            if (data.message == 'liked') {
                like(post_id)
            }
        })
}