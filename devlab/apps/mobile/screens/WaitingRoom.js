import React from 'react';
import { StyleSheet, View, Text, ImageBackground,Dimensions, Pressable } from 'react-native';
import { FlatGrid } from 'react-native-super-grid';

export default function WaitingRoom({ navigation }) {
  const [items, setItems] = React.useState([
    { name: 'TURQUOISE', code: '#1abc9c' },
    { name: 'EMERALD', code: '#2ecc71' },
    { name: 'PETER RIVER', code: '#3498db' },
    { name: 'AMETHYST', code: '#9b59b6' },
    { name: 'WET ASPHALT', code: '#34495e' },
    { name: 'GREEN SEA', code: '#16a085' },
  ]);

  return (
    <ImageBackground source={require('../assets/game_bg.png') } resizeMode="cover" style={styles.image}>
    <FlatGrid
      itemDimension={100}
      data={items}
      style={styles.gridView}
      // staticDimension={300}
      // fixed
      spacing={30}
      renderItem={({ item }) => (
        <View style={[styles.itemContainer, { backgroundColor: item.code }]}>
          <Text style={styles.itemName}>{item.name}</Text>
          <Text style={styles.itemCode}>{item.code}</Text>
        </View>
      )}
    />
    <Pressable style = {styles.button} onPress={() => navigation.navigate('GameView')}><Text style={styles.textButton}>Entrer dans le jeu</Text></Pressable>
    </ImageBackground>
  );
}

const styles = StyleSheet.create({
  image: {
    height: Dimensions.get("window").height,
},
  gridView: {
    marginTop: 170,
    flex: 1,
  },
  itemContainer: {
    justifyContent: 'flex-end',
    borderRadius: 5,
    padding: 10,
    height: 154,
    width: 154,
  },
  itemName: {
    fontSize: 16,
    color: '#fff',
    fontWeight: '600',
  },
  itemCode: {
    fontWeight: '600',
    fontSize: 12,
    color: '#fff',
  },
});
