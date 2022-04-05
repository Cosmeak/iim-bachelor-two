import React from "react";
import { Dimensions, ImageBackground, StyleSheet, Text, TextInput, View, Image, Pressable } from "react-native";


class HomeScreen extends React.Component {
  render() {
    return (
        <View style={styles.container}>
      <ImageBackground source={require('../assets/bg_cb.png') } resizeMode="cover" style={styles.image}>
        <View style={styles.rond}>
          <Image
            style={styles.logo}
            source={require('../assets/logo_cb.png')}
          />
        </View>
          <TextInput
            style={styles.input}
            placeholder="Entrer un pseudo"
            placeholderTextColor="#ffffff80"
            underlineColorAndroid='transparent'
          /> 
            <Pressable style = {styles.button} onPress={() => alert('Bouffon CALME TOI MERDE')}><Text style={styles.textButton}>Entrer dans le jeu</Text></Pressable>
            <Pressable style={styles.admin} onPress={() => navigation.navigate('Details')}><Text>Administrateur ?</Text></Pressable>
      </ImageBackground>
      </View>
    );
  }
}