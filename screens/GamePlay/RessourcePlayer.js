import { def } from "@vue/shared";
import React from "react";
import reactDom from "react-dom";
import { Button, View, Text } from 'react-native';

import { Dimensions, ImageBackground, StyleSheet, Text, TextInput, View, Image, Pressable } from "react-native";

class RessourcePlayer extends React.Component{
    render(){
        return(
            <View style={styles.container}>
            <ImageBackground source={require('../assets/game_bg.png') } resizeMode="cover" style={styles.image}>
              <Text style={[styles.text, margin.mt]}>BIG Ressource</Text>
              <Button
                  title="Game"
                  onPress={() => navigation.navigate('Game')}
                />
            </ImageBackground>
            </View>
        )
    }
    
}


const styles = StyleSheet.create({
    container: {
      flex: 1,
  },
    image: {
      height: Dimensions.get("window").height,
  },
    text: {
      color: "white",
      fontSize: 42,
      lineHeight: 84,
      fontWeight: "bold",
      textAlign: "center",
      backgroundColor: "#000000c0"
  },
    rond: {
      padding : 0,
      borderRadius: 1000,
      backgroundColor: "#000000c0",
      overflow: 'hidden',
      alignSelf: 'center',
      marginTop : '30%'
  },
    logo: {
      width: 160,
      height: 160,
      alignSelf: 'center',
      resizeMode : "contain"
      
  
    },
    input: {
      alignSelf : 'center',
      marginTop : '20%',
      backgroundColor : "#000000c0",
      width: '80%',
      textAlign:'left',
      borderWidth: 1,
      borderColor: '#000000c0',
      color : 'white',
      borderRadius : 5,
      paddingHorizontal : 16,
      paddingVertical: 8,
    },
    button: {
      alignSelf : 'center',
      marginTop : 24,
      backgroundColor : "#000000c0",
      width: 'auto',
      borderWidth: 1,
      borderRadius : 150/2,
    },
    textButton: {
      paddingVertical: 8,
      paddingHorizontal: 32,
      textAlign: 'center',
      color: 'white'
    },
    admin: {
      alignSelf: 'center',
      marginTop: 'auto',
      marginBottom: 32,
      backgroundColor : "#000000c0",
      paddingHorizontal: 16,
      paddingVertical: 8,
      borderRadius: 150/2,
    },
    inputt: {
      alignSelf : 'center',
      backgroundColor : "#000000c0",
      width: '80%',
      textAlign:'left',
      borderWidth: 1,
      borderColor: '#000000c0',
      color : 'white',
      borderRadius : 5,
      paddingHorizontal : 16,
      paddingVertical: 8,
    },
  });
  
  const color = StyleSheet.create({
    white: {
      color : 'white',
      opacity : 1
  },
  });
  
  const margin = StyleSheet.create({
    mt: {
      marginTop : "20%"
    },
    mt5: {
      marginTop : "4%"
    },
    mtbar:{
      marginTop : '12%'
    }
  })
  
  const border = StyleSheet.create({
    br5:{
      borderRadius : 10
    },
    brF:{
      borderBottomLeftRadius: 50,
      borderBottomRightRadius: 50,
      borderTopLeftRadius: 10,
      borderTopRightRadius: 10,
    }
  })
  
  const game = StyleSheet.create({
    bg: {
      backgroundColor : '#00000070',
    },
  
    part1 : {
      width : '95%',
      height : '6%',
      alignSelf: 'center',
    },
    part2 : {
      width : '95%',
      height : '75%',
      alignSelf: 'center',
    },
  
    part3 : {
      width : '90%',
      height : '20%',
      alignSelf: 'center',
    },
    part4 : {
      width : '95%',
      height : '8%',
      alignSelf: 'center',
    },
  })



export default RessourcePlayer;