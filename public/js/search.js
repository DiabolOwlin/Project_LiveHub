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

function createArticle(article) {
    const template = document.querySelector("#article-template");
    // console.log(template)
    const clone = template.content.cloneNode(true);

    console.log(clone)
    const div = clone.querySelector("div");
    div.id = article.id;

    // const author_time = clone.querySelector("h4")
    // author_time.innerHTML = article
    const image = clone.querySelector("img");
    image.src = `/public/uploads/${article.image}`;
    const title = clone.querySelector("h2");
    title.innerHTML = article.title;
    const description = clone.querySelector("p");
    description.innerHTML = article.description;
    // const like = clone.querySelector(".fa-heart");
    // like.innerText = article.like;
    // const dislike = clone.querySelector(".fa-minus-square");
    // dislike.innerText = article.dislike;

    articleContainer.appendChild(clone);
}
