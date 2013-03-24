/**
 *  main javascript file for the clans game. 
 */

function moveElement(id,left,top)
{
    $("#" + id).animate({ 'left': left + "px", 'top': top + "px" }, 4000);    
}
    