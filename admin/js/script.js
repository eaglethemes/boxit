// Selecting the sidebar and buttons
const wrapper = document.querySelector(".wrapper");
const sidebar = document.querySelector(".sidebar");
const sidebarOpenBtn = document.querySelector("#sidebar-open");
const sidebarCloseBtn = document.querySelector("#sidebar-close");
const sidebarLockBtn = document.querySelector("#lock-icon");

// Function to toggle the lock state of the sidebar
const toggleLock = () => {
  sidebar.classList.toggle("locked");
  updateWrapperClass();
  // If the sidebar is not locked, add hoverability
  if (!sidebar.classList.contains("locked")) {
    sidebar.classList.add("hoverable");
    sidebarLockBtn.classList.replace("bx-lock-alt", "bx-lock-open-alt");
  } else {
    sidebar.classList.remove("hoverable");
    sidebarLockBtn.classList.replace("bx-lock-open-alt", "bx-lock-alt");
  }
};

// Function to hide the sidebar when the mouse leaves
const hideSidebar = () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.add("close");
    updateWrapperClass();
  }
};

// Function to show the sidebar when the mouse enters
const showSidebar = () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.remove("close");
    updateWrapperClass();
  }
};

// Function to show and hide the sidebar
const toggleSidebar = () => {
  sidebar.classList.toggle("close");
  updateWrapperClass();
};

// Function to update the wrapper class based on the sidebar state
const updateWrapperClass = () => {
  wrapper.classList.toggle("sidebar-closed", sidebar.classList.contains("close"));
};

// Initial update based on the initial state
updateWrapperClass();

// Adding event listeners to buttons and sidebar for the corresponding actions
sidebarLockBtn.addEventListener("click", toggleLock);
sidebar.addEventListener("mouseleave", hideSidebar);
sidebar.addEventListener("mouseenter", showSidebar);
sidebarOpenBtn.addEventListener("click", toggleSidebar);
sidebarCloseBtn.addEventListener("click", toggleSidebar);



function toggleSubMenu(event) {
  event.preventDefault();
  const subMenu = event.target.closest('.item').querySelector('.submenu');
  subMenu.classList.toggle('show');

  // const overviewCaret = document.getElementById('overview-caret');
  // overviewCaret.classList.toggle('rotate');
}