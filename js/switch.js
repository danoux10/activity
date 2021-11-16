//LINK switch
const btnToggle = document.querySelector(".switch");

btnToggle.addEventListener("click", () => {
  const body = document.body;

  if (body.classList.contains("green")) {
    body.classList.add("red");
    body.classList.remove("green");
  } else if (body.classList.contains("red")) {
    body.classList.add("green");
    body.classList.remove("red");
  }
});


