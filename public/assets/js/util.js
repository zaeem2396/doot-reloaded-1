const verifyJwtToekn = async () => {
    try {
        const isTokenValid = await axios.post('/verifyToken', {}, {
            headers: {
                Autthorization: `Bearer ${localStorage.getItem('access_token')}`
            }
        });
        console.log(isTokenValid);
    } catch (error) {
        console.error(`something went wrong ${error}`);        
    }
}