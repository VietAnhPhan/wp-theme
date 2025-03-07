export class Search {
    constructor() {
        this.resultsDiv = document.querySelector("#search-overlay__results");
        this.searchButton = document.querySelectorAll(".search-button");
        // console.log(this.searchButton);
        this.closeSearchButton = document.querySelector(".search-overlay__close");
        this.searchBar = document.querySelector(".search-overlay");
        this.navItems = document.querySelector(".nav-items");
        this.searchField = document.querySelector("#search-term");
        this.eventsSearch();

        this.typingTimer;
    }

    eventsSearch() {

        this.searchButton.forEach(button => button.addEventListener("click", this.openSearch.bind(this)));
        // addEventListener("click", this.openSearch.bind(this));
        this.closeSearchButton.addEventListener("click", this.closeSearch.bind(this));
        this.searchField.addEventListener("keydown", this.typingLogic.bind(this));
    }

    typingLogic() {
        clearTimeout(this.typingTimer);
        this.typingTimer = setTimeout(this.getResults.bind(this), 500);
    }

    getResults() {
        const searchValue = this.searchField.value;
        this.resultsDiv.innerHTML = "";
        
        wp.api.loadPromise.done(function () {
            // console.log("this is value "+ this.searchField.value );
            const post = new wp.api.models.Post();
            post.fetch().done(function (posts) {
                posts.forEach(function (post) {
                    const li = document.createElement("li");
                    const a = document.createElement("a");
                    a.setAttribute("href", post.link);
                    a.classList.add("third-color");
                    a.classList.add("text-decoration-none");
                    a.textContent = post.title.rendered;
                    li.appendChild(a);
                    this.resultsDiv.appendChild(li);
                    // console.log(post.title.rendered);
                }.bind(this));
            }.bind(this));
        }.bind(this));
        // this.resultsDiv.innerHTML = this.searchField.value;
    }

    openSearch() {
        this.searchBar.classList.add("search-overlay__active");
        this.navItems.classList.add("display-none");
        this.closeSearchButton.classList.add("overlay__background");
    }

    closeSearch() {
        this.searchBar.classList.remove("search-overlay__active");
        this.navItems.classList.remove("display-none");
        this.closeSearchButton.classList.remove("overlay__background");
    }
}

// export default Search;
