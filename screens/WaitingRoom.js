import React from "react";
import reactDom from "react-dom";
import { Dimensions, ImageBackground, StyleSheet, Text, TextInput, View, Image, Pressable } from "react-native";
import { Button, View, Text } from 'react-native';

class WaitingRoom extends React.Component{
    render(){
      return (
        <View style={styles.container}>
        <ImageBackground source={require('../assets/bg_cb.png') } resizeMode="cover" style={styles.image}>
          <View style={style.player}/>
        </ImageBackground>
      </View> 
      )
    }
}

const styles = StyleSheet.create({
    container: {
      flex: 1,
  },
})

export default WaitingRoom;
