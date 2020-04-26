function callView (element)
{
    let parent = document.getElementsByClassName('submenu-aikido-item')
    let URLaccessed = element.dataset.href

    for (child of parent)
    {
        child.classList.remove('active-submenu')
    }

    element.classList.add('active-submenu')

    fetch(URLaccessed)
    .then(res => res.json())
    .then(res => renderView(res.title, 'aikido-content', res.view))
    .catch(err => console.log(err))
}

function renderView (titleText = null, parentViewId, viewContent)
{   
    let parent = document.getElementById(parentViewId);
    let containerLoader = document.createElement('div')
    let loader = document.createElement('div')

    containerLoader.classList.add('container-loader')
    loader.classList.add('loader')

    parent.innerHTML = ''
    containerLoader.appendChild(loader)
    parent.append(containerLoader)
    
    titleText ? document.getElementsByTagName('title')[0].innerText = titleText : ''
    
    setTimeout(e => 
        {
            parent.innerHTML = ''
            parent.innerHTML = viewContent
        },1500)
    
}