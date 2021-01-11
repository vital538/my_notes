import {TOPICS_LOADED} from "../constants/action-types";


export function getTitles(){
    return function (dispatch){
        return fetch("http://127.0.0.1:8000/api/topics")
            .then(response => response.json())
            .then(json => {
            dispatch({type: TOPICS_LOADED, payload: json});
        });
    };

}
