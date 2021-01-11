import {TOPICS_LOADED} from "../constants/action-types"

const initialState = {
    topics: []
}

function rootReducer(state = initialState, action) {
    switch (action.type) {
        case 'TOPICS_LOADED' :
            return {
                topics: action.payload
            };
        default:
            return state;
    }

}

export default rootReducer;
