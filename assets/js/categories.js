
function fetchCategories() {
    // Simulating API call with a promise (you would replace this with fetch or axios)
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve(apiResponse);
        }, 1000); // Simulate network delay
    });
}

// Generate radio buttons dynamically
function createRadioButtons(categories) {
    const radioContainer = document.getElementById('radio-buttons');
    
    categories.forEach(category => {
        const radioButton = document.createElement('input');
        radioButton.type = 'radio';
        radioButton.id = category.id;
        radioButton.name = 'agenda_categorie';
        radioButton.value = category.id;
        
        const label = document.createElement('label');
        label.htmlFor = category.id;
        label.textContent = category.name;
        
        // Append radio button and label to the container
        radioContainer.appendChild(radioButton);
        radioContainer.appendChild(label);
        radioContainer.appendChild(document.createElement('br'));
        
        // Add event listener to show movies when clicked
        radioButton.addEventListener('change', () => showMovies(category.movies));
    });
}

// Show movies dynamically based on selected category
function showMovies(movies) {
    const movieContainer = document.getElementById('movie-container');
    movieContainer.innerHTML = ''; // Clear the previous movie list
    
    const movieList = document.createElement('ul');
    movies.forEach(movie => {
        const listItem = document.createElement('li');
        listItem.textContent = movie;
        movieList.appendChild(listItem);
    });
    
    movieContainer.appendChild(movieList);
    movieContainer.style.display = 'block'; // Make sure the movie list is visible
}

// Initialize the form with categories
async function initialize() {
    const data = await fetchCategories();
    createRadioButtons(data.categories);
}