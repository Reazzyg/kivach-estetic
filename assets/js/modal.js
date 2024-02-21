import { createDOMElement } from './utils.js';


export function doModal(){

function createStars(count) {
    const starImg = '<img src="assets/img/Star-filled.svg" alt="" class="comment-rating__star">';
    return starImg.repeat(count);
}

function openModal(name, rating, text) {
    const modalOverlay = createDOMElement('div', 'modal-overlay');
    const modal = createDOMElement('div', 'comment modal ');
    const modalContent = createDOMElement('div', 'modal-content');

    const nameElement = createDOMElement('p', 'comment-profile__name',  name);
   const ratingElement = document.createElement('div');
    ratingElement.className = 'comment-rating';
    ratingElement.innerHTML = createStars(parseInt(rating));
    const fullTextElement = createDOMElement('p', 'comment__text', text);
    const closeButton = createDOMElement('img', 'modal-close', '', '/assets/img/close.svg');

    modalContent.appendChild(ratingElement);
    modalContent.appendChild(fullTextElement);
    modalContent.appendChild(nameElement);
    modalContent.appendChild(closeButton);

    modal.appendChild(modalContent);
    document.body.appendChild(modalOverlay);
    document.body.appendChild(modal);

    modalOverlay.addEventListener('click', closeModal);
    closeButton.addEventListener('click', closeModal);
    modal.addEventListener('click', closeModal);

    function closeModal() {
        modalOverlay.remove();
        modal.remove();
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const commentTexts = document.querySelectorAll('.comment__text');
    commentTexts.forEach(function(commentText) {
        const originalText = commentText.textContent;
        const maxLength = 100;
        if (originalText.length > maxLength) {
            const trimmedText = originalText.substr(0, maxLength);
            const readMoreLink = createDOMElement('span', 'comment-more', '... Читать далее');
            const name = commentText.parentElement.getAttribute('data-name');
            const rating = commentText.parentElement.getAttribute('data-rating');
            readMoreLink.addEventListener('click', function() {
                openModal(name, rating, originalText);
            });
            commentText.textContent = trimmedText;
            commentText.appendChild(readMoreLink);
        }
    });
});
}