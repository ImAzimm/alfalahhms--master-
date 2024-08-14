function autoResizeTextarea() {
    console.log('lalu');
    
    var textareas = document.getElementsByClassName('autoResizeHeight');
    Array.from(textareas).forEach(textarea => {
        textarea.style.height = 'auto'; // Reset height to calculate scrollHeight
        textarea.style.height = textarea.scrollHeight + 'px'; // Set height to content's height
        textarea.style.overflow = 'hidden'; // Prevent scrolling
        textarea.style.resize = 'none'; // Prevent scrolling
    });
}

// Adjust height on page load
document.addEventListener('DOMContentLoaded', autoResizeTextarea);