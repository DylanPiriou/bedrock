const navigation = document.querySelector('nav');
const limit = 200;

function handleScroll() {
    if (window.scrollY > limit) {
        navigation.classList.remove("text-white");
        navigation.classList.remove("bg-black");
        navigation.classList.add("bg-gray-200");
        navigation.classList.add("text-black");
    } else if (window.scrollY < limit) {
        navigation.classList.remove("text-black");
        navigation.classList.remove("bg-gray-200");
        navigation.classList.add("bg-black");
        navigation.classList.add("text-white");
    }
}

window.addEventListener('scroll', handleScroll);