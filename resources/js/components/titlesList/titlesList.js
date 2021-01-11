import React from 'react';
import {connect} from "react-redux";
import {Button} from "@material-ui/core";
import {getTitles} from "../../actions";


const mapStateToProps = state => {
    return {topics: state.topics}
}

const ConnectedTitlesList = ({dispatch, topics}) => {
    dispatch(getTitles());
    return (
        <ul>
            {topics.map((el) => {
                return (
                    <li key={el.id}>{el.name}</li>
                );
            })}
        </ul>
    );

};

const TitlesList = connect(mapStateToProps)(ConnectedTitlesList);

export default TitlesList;


