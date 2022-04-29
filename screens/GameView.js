import React from "react"
import { Dimensions, ImageBackground, StyleSheet, Text, View, Button, Pressable } from "react-native"
import { FlatGrid } from 'react-native-super-grid';
import { NavigationContainer } from '@react-navigation/native';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';


  function GameView(){
        const [items, setItems] = React.useState([
          { name: 'brown', code: '#BE6605' },
          { name: 'black', code: '#000000' },
          { name: 'black', code: '#000000' },
          { name: 'black', code: '#000000' },
          { name: 'brown', code: '#BE6605' },
          { name: 'yellow', code: '#FFE600' },
          { name: 'white', code: '#BE6605' },
          { name: 'black', code: '#000000' },
          { name: 'black', code: '#000000' },
          { name: 'brown', code: '#BE6605' },
          { name: 'brown', code: '#BE6605' },
          

        ]);
          return(
              <View style={styles.container}>
                <ImageBackground source={require('../assets/game_bg.png') } resizeMode="cover" style={styles.image}>
                  <View style={[game.part1 , margin.mtbar, game.bg, border.br5]}>
                    <Text style={color.white}></Text>
                  </View>
                  <View style={[game.part2 , margin.mt5, game.bg, border.br5]}>
                  <FlatGrid
                    itemDimension={35}
                    data={items}
                    style={styles.gridView}
                    // staticDimension={300}
                    // fixed
                    spacing={1}
                    renderItem={({ item }) => (
                      <View style={[styles.hexagon , styles.itemContainer] }>
                      <View style={[styles.hexagonInner , {backgroundColor: item.code}]} />
                      <View style={[styles.hexagonBefore ,  {borderBottomColor:item.code}]} />
                      <View style={[styles.hexagonAfter ,{borderTopColor:item.code}]} />
                    </View> 
                      
        )}
      />
                  </View>
                  <View style={[game.part4 , margin.mt5, game.bg, border.brF]}>
                  </View>
                </ImageBackground>
              </View>
          )
      }


      function RessourcePlayer(){
            return(
                <View style={styles.container}>
                <ImageBackground source={ require('../assets/game_bg.png') } resizeMode="cover" style={styles.image}>
                  <Text style={[styles.text, margin.mt]}>BIG Ressource</Text>
                </ImageBackground>
                </View>
            )
        }

        function Batiment(){
          return(
              <View style={styles.container}>
              <ImageBackground source={ require('../assets/game_bg.png') } resizeMode="cover" style={styles.image}>
                <Text style={[styles.text, margin.mt]}>BIG Batiment</Text>
              </ImageBackground>
              </View>
          )
      }

      const Tab = createBottomTabNavigator();

function MyTabs() {
  return (
    <Tab.Navigator>
      <Tab.Screen name="Jeu" component={GameView} options={{headerShown:false}}/>
      <Tab.Screen name="Règles" component={RessourcePlayer} options={{headerShown:false}}/>
      <Tab.Screen name="Batiment" component={Batiment} options={{headerShown:false}}/>
    </Tab.Navigator>
  );
}



const styles = StyleSheet.create({
    container: {
      flex: 1,
  },
  hexagon: {
    width: 40,
    height: 25,
  },

  itemContainer: {
    marginTop: 20,
  },
  hexagonInner: {
    width: 40,
    height: 25,
    backgroundColor: "red",
  },
  hexagonAfter: {
    position: "absolute",
    bottom: -20,
    left: 0,
    width: 0,
    height: 0,
    borderStyle: "solid",
    borderLeftWidth: 20,
    borderLeftColor: "transparent",
    borderRightWidth: 20,
    borderRightColor: "transparent",
    borderTopWidth: 20,
    borderTopColor: "red",
  },
  hexagonBefore: {
    position: "absolute",
    top: -20,
    left: 0,
    width: 0,
    height: 0,
    borderStyle: "solid",
    borderLeftWidth: 20,
    borderLeftColor: "transparent",
    borderRightWidth: 20,
    borderRightColor: "transparent",
    borderBottomWidth: 20,
    borderBottomColor: "red",
  },
    image: {
      height: Dimensions.get("window").height,
  },
  gridView: {
    marginTop: 13,
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

  
  export default function App() {
    return (
        <MyTabs />
    );
  }   
  