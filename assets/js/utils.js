export function createDOMElement(tagName, className, textContent = null, src = null) {
    const element = document.createElement(tagName);
    element.className = className;
    if (textContent !== null) {
        element.textContent = textContent;
    }
    if (src !== null) {
        element.src = src;
    }
    return element;
}
