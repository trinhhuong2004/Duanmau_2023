let currentIndex = 0;
        const slideList = document.getElementsByClassName("banner");
        slideList[currentIndex].style.display = "block";

function preview() {
  for (let i = 0; i < slideList.length; i++) {
    slideList[i].style.display = "none";
  }
  currentIndex--;
  if (currentIndex < 0) {
    currentIndex = slideList.length-1;
  }
  slideList[currentIndex].style.display = "block";
}
setInterval(preview,3000);

const placeholderText = "Nhập tìm kiếm sản phẩm";
const placeholderElement = document.getElementById("search-input");

function typingEffect() {
  let i = 0;
  setInterval(() => {
    placeholderElement.placeholder = placeholderText.slice(0, i);
    i = (i + 1) % (placeholderText.length + 1);
  }, 150);
}

typingEffect();