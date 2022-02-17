# LiveHub

### The name refers to those places in human history, such as ports or tavernes, where people exchanged ideas and experiences through communication. 
#### LiveHub is a collective blog type project and is a modern interpretation of these places, where articles on any topic can be found and read by any user.

## Technologies used: HTML, CSS, PHP, PostgresSQL, JavaScript, Fetch API, Docker.

## Design:
The design was made in minimalist tones, using a small number of colors, mainly dark blue and white colors, because it is associated with confidence, reliability and peace of mind.

IT is also adaptive and responsible, which means that this project will work fine on all devices.


## What has done:
### User and article system(on PHP)

  Implemented login and register systems are using hash-protection.
  
  Only identified users can write articles and only those can set "likes" or "dislikes".
  
  Intuitive sandbox for writers, which also allows them use images or highlight a separate element or add images.
  
  PostgresSQL database keeps all registered users and all articles written by those users.
  All actions on data in db will have cascade consequences (deleting user - deleting all articles that was wrote by that user).
  
### Validation on login and register inputs (using JavaScript)
```js
 const form = document.querySelector("form");
const emailInput = form.querySelector('input[name="email"]');
const confirmedPasswordInput = form.querySelector('input[name="confirmedPassword"]');

function isEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}

function arePasswordsSame(password, confirmedPassword) {
    return password === confirmedPassword;
}

function markValidation(element, condition) {
    !condition ? element.classList.add('no-valid') : element.classList.remove('no-valid');
}

function validateEmail() {
    setTimeout(function () {
            markValidation(emailInput, isEmail(emailInput.value));
        },
        1000
    );
}

function validatePassword() {
    setTimeout(function () {
        console.log("password event");
            const condition = arePasswordsSame(
                confirmedPasswordInput.previousElementSibling.value,
                confirmedPasswordInput.value
            );
        console.log("password:", confirmedPasswordInput.previousElementSibling.value)
        // console.log("confirmed:", confirmedPasswordInput.value);
            markValidation(confirmedPasswordInput, condition);
        },
        1000
    );
}

emailInput.addEventListener('keyup', validateEmail);
confirmedPasswordInput.addEventListener('keyup', validatePassword);

```
 
### Search engine (on JavaScript)
This allows you to search for any mention of the words you type in to find any article.

```js
const search = document.querySelector('input[placeholder="search article"]');
const articleContainer = document.querySelector(".articles");

search.addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const data = {search: this.value};
        fetch("/search", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(function (response) {
            return response.json();
        }).then(function (articles) {
            articleContainer.innerHTML = "";
            console.log('ja tut')
            loadArticles(articles)
        });
    }
});

function loadArticles(articles) {
    articles.forEach(article => {
        console.log(article);
        createArticle(article);
    });
}
```
### Likes and dislikes (on JavaScript)
That script allows users to mark articles that other could see it useful in the future.
```js
const likeButtons = document.querySelectorAll(".fa-heart");
const dislikeButtons = document.querySelectorAll(".fa-minus-square");


function giveLike() {
    const likes = this;
    const container = likes.parentElement.parentElement.parentElement;
    const id = container.getAttribute("id");

    fetch(`/like/${id}`)
        .then(function () {
            likes.innerHTML = parseInt(likes.innerHTML) + 1;
        })
}

function giveDislike() {
    const dislikes = this;
    const container = dislikes.parentElement.parentElement.parentElement;
    const id = container.getAttribute("id");

    fetch(`/dislike/${id}`)
        .then(function () {
            dislikes.innerHTML = parseInt(dislikes.innerHTML) + 1;
        })
}

likeButtons.forEach(button => button.addEventListener("click", giveLike));
dislikeButtons.forEach(button => button.addEventListener("click", giveDislike));
```

Navigation on pages, "go to top" and "back" buttons (on JavaScript, JQuery)

```js
    var btn_top = $('#go_to_top');
    var btn_go_back = $('#go_back');
    var pageYLabel = 0;

    $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
    btn_top.addClass('show');
    btn_go_back.removeClass('show');
} else {
    btn_top.removeClass('show');
    btn_go_back.addClass('show');
}

});

    btn_top.on('click', function(e) {
    e.preventDefault();
    pageYLabel = $(window).scrollTop();
    $('html, body').animate({scrollTop:0}, '300');

});

    btn_go_back.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:pageYLabel}, "slow");

})
```


# What will be realized in the future?
### - Authorize via other services (Google, GitHub, etc.)
### - User sessions using cookies
### - Scale of project
### - Users` Roles
### - Deploy =)
