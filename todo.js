 


  const addButton = document.querySelector('#addbutton');
const popup = document.querySelector('#popup');

addButton.addEventListener('click', () => {
popup.style.display = 'block';
});
const closeIcon = document.querySelector('.close-icon');

closeIcon.addEventListener('click', () => {
popup.style.display = 'none';
});
 
 
//endpopup
const todoButton = document.getElementById("todobutton");
const doneButton = document.getElementById("donebutton");
const todoDiv = document.getElementById("todo");
const doneDiv = document.getElementById("done");
const todoList = document.querySelector(".detailsof");
const donelist = document.querySelector('#tasksofdone');
const donetask = document.querySelector('#donetasks');
donelist.style.display = 'none';

todoButton.addEventListener("click", () => {
  todoDiv.classList.add("active");
  todoList.style.display = 'block';
  doneDiv.classList.remove("active");
  donelist.style.display = 'none';
});

doneButton.addEventListener("click", () => {
  doneDiv.classList.add("active");
  todoDiv.classList.remove("active");
  doneDiv.classList.add("to-right");
  todoList.style.display = 'none';
  donelist.style.display = 'block';
  todoDiv.classList.add("to-left");

  setTimeout(() => {
    doneDiv.classList.remove("to-right");
    todoDiv.classList.remove("to-left");
  }, 300);
});
function changeColor(element) {
  // Remove the blue color from all the divs
  const allDivs = document.querySelectorAll('.alltags, #work, #meeting, #workout, #personal');
  allDivs.forEach(div => {
    div.style.color = '';
  });

  // Add the blue color to the clicked div
  element.style.color = 'blue';
}
 
function searchTodos() {
        var input = document.getElementById('searchInput').value.toLowerCase();
        var todos = document.getElementsByClassName('todo-list');

        for (var i = 0; i < todos.length; i++) {
            var title = todos[i].getElementsByTagName('h4')[0].innerText.toLowerCase();
            var description = todos[i].getElementsByTagName('p')[0].innerText.toLowerCase();
            

            if (title.includes(input) || description.includes(input)) {
                todos[i].style.display = 'block';
            } else {
                todos[i].style.display = 'none';
            }
        }
    }

     
    document.getElementById('searchInput').addEventListener('keyup', function() {
        searchTodos();
});
 